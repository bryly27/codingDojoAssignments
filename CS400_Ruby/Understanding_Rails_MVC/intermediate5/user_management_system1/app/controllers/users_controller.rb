class UsersController < ApplicationController
  def index
  	@users = User.all
  end

  def new 
  	render 'new'
  end

  def create
  	@user = User.create(first_name: params[:first_name], last_name: params[:last_name], email_address: params[:email], password: params[:password])
  	redirect_to '/users/index'
  end

 	def show 
 		@user = User.find(params[:id])
 		render 'show'
 	end

 	def edit
 		@user = User.find(params[:id])
 		render 'edit'
 	end

 	def update 
 		User.find(params[:id]).update(first_name: params[:first_name], last_name: params[:last_name], email_address: params[:email], password: params[:password])
 		redirect_to '/users/index'
 	end

 	def destroy 
 		User.find(params[:id]).destroy
 		redirect_to '/users/index'
 	end
end
