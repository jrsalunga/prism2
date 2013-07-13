//$(function(){
	
		
	var obj = {user:"Jefferson Salunga" , state: 'nav', id:"73494398182b11e2ad9f5404a67007de", render:true};
	
	var App = Backbone.Model.extend({
			initialize : function(){
				
			},
			toggleState: function(){
				this.get('state') === 'initial' ? this.set({'state': 'nav'}) : this.set({'state': 'initial'});
			},
			toggleAnimate: function(){
				this.get('render') === true ? this.set({'render': false}) : this.set({'render': true});
			},
			setState: function(state){
				this.set({'state': state});
			}
		});

	var app = new App(obj);
	
	var AppHeaderView = Backbone.View.extend({
			className : 'h-main-container',
			//template : _.template($('#header-tpl').html()),
			initialize: function(){
				this.template = _.template($('#header-tpl').html());
				this.model.on('change', this.render, this);
			},
			render: function(){
				this.$el.html(this.template(this.model.toJSON()));
				return this;
			}
		});
	
	var AppView = Backbone.View.extend({
			el: 'body',
			className: 'state-nav',
			events:{
				'click [data-state]' : 'changeState',
				'click .splitter' : 'toggleSplitter'
			},
			initialize: function(){
				
				if(this.model.get('render')==false){
					this.model.on('change', this.render, this);
				}
				
				this.template = _.template($('#body-template').html());
			},		
			render: function(){
				
				this.$el.html(this.template(this.model.toJSON()));	
				
				// append the header
				var appHeaderView = new AppHeaderView({model: app});
				$("#h").html(appHeaderView.render().el);
				
				var menus = new Menus();
				menus.fetch();
				var menusView = new MenusView({collection: menus});
				$("#nav-container").html(menusView.render().el);
						
				
				return this;
			}, 
			changeState: function(e){
				e.preventDefault();
				var state = $(e.currentTarget).data("state");
				this.model.setState(state);
				this.renderState();	 
			},
			toggleSplitter : function(e){
				e.preventDefault();
				this.model.toggleState();	
				this.renderState();	
			},
			renderState: function(){		
				this.$el // or  $('body') or 'body'
			  	.removeClass(
					function(i, c) {	
						var m = c.match(/state\d+/g);
						if(m != null) {
							return m.join(" ");
						 } else {
							return c;
						}
					})
				.addClass('state-' + this.model.get('state'));	
			}
		});
	
	
	
	
	//console.log(appView.el);
	
$(document).ready(function(e) {
	
	var appView = new AppView({model: app});
	appView.render();
    $(appView.el).appendTo("#app-body");
	
	
});
	
	
	
	
