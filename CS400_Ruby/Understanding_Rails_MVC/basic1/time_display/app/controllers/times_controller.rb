class TimesController < ApplicationController
  def index
  	@time = Time.now.strftime('%B %d, %Y')
  	@time2 = Time.now.strftime('%I:%M %p')
  end
end
