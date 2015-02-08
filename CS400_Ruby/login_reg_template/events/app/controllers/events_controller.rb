class EventsController < ApplicationController
  def index
  	@user = User.find(session[:user_id]);
  	# puts session[:user].first_name
  	# puts session[:user].first_name
  end
end
