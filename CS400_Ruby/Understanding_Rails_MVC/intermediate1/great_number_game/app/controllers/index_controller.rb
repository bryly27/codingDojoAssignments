class IndexController < ApplicationController

	def index
		if session[:random_number]
		else
			session[:random_number] = rand(1..100)
		end
		@random_number = session[:random_number]
	end


  def create
  	render 'index'
  end
end
