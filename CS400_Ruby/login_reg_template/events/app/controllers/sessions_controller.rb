class SessionsController < ApplicationController
  def index
  end

  def show
		user = User.authenticate(params[:email], params[:password])

		if user.nil?
			flash[:error] = "Your email or password is incorrect"
	    redirect_to '/'
		else
			session[:user_id] = user.id
			redirect_to '/events'
		end	
  end

  def destroy
  	reset_session
  	redirect_to '/'
  end
end
