class UsersController < ApplicationController
  def index
  	if session[:user_id]
  		redirect_to '/events'
  	end
  end

  def create
  	@user = User.new(user_params)
  	if @user.save
  	  flash[:notice] = 'New user created!'
  	  redirect_to '/'
  	else
  	  flash[:errors] = @user.errors.full_messages
  		redirect_to '/'
  	end
  end

  def edit
  	@user = User.find(session[:user_id])
  end

  def update
  	if params[:password].blank?
  	  params.delete(:password)
  	  params.delete(:password_confirmation)
  	end
    User.find(session[:user_id]).update!(user_params_update)
  	redirect_to '/events'
  end

  private
    def user_params
      params.require(:user).permit(:first_name, :last_name, :email, :city, :state, :password, :password_confirmation)
    end

    def user_params_update
    	params.require(:user).permit(:first_name, :last_name, :email, :city, :state)
    end



end
