class SurveysController < ApplicationController
  def index
  	render "index"
  end

  def create
  	if session[:counter]
  		session[:counter] +=1
  	else
  		session[:counter] = 1
  	end
  	@name = params[:name] 
  	@location = params[:location] 
  	@language = params[:language] 
  	@comment = params[:comment]
  	@counter = session[:counter]
  	render "create"
  end
end
