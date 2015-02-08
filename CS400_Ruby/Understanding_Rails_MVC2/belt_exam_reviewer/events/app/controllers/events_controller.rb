class EventsController < ApplicationController
  def index
  	@self = session[:user_id]
  	@user = User.find(session[:user_id]);
  	@events = Event.where(state: @user.state)
  	@events2 = Event.where.not(state: @user.state)
  end

  def create
  	@event = Event.new(event_params)
  	if @event.save
  	  flash[:notice] = 'New event created!'
  	  redirect_to '/events'
  	else
  	  flash[:errors] = @event.errors.full_messages
  		redirect_to '/events'
  	end
  end

  def show
  	@event = Event.find(params[:id])
  end

  def edit
  	@event = Event.find(params[:id])
  end

  def update
  	Event.find(params[:id]).update(event_params)
  	redirect_to '/events'
  end

  private
    def event_params
      params.require(:event).permit(:name, :date, :city, :state, :user_id)
    end
end
