class NumbersController < ApplicationController
  def index
  	if session[:random_number] == nil
			session[:random_number] = rand(1..100)
		end
		@random_number = session[:random_number]
  end

  def numbers
  	if params[:guess].to_i < session[:random_number]
  		flash[:low] = "Too low!"
  	elsif params[:guess].to_i > session[:random_number]
  		flash[:high] = "Too high!"
  	else
  		flash[:correct] = "you got it! <br> <form action='/reset' method='post'>
  									<input type='submit' value='Play Again'>
  									<input name='authenticity_token' value='<%=form_authenticity_token %>' type='hidden'>
  								</form>"
  	end
  	redirect_to '/numbers/'
  end

  def reset
  	session[:random_number] = nil
  	redirect_to '/'
  end
end
