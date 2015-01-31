class DojoController < ApplicationController
  def index
  end
  def home
  	puts "dojo/home"
  	@name = 'hello'
  	redirect_to '/dojo/seattle'
  end
  def seattle
  end
end
