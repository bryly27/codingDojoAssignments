class WordsController < ApplicationController
  def index
  	if session[:counter]
  		session[:counter] +=1
  	else
  		session[:counter] = 1
  	end
  	@count = session[:counter]
  	@word = (0...14).map { (65 + rand(26)).chr }.join
  end
end
