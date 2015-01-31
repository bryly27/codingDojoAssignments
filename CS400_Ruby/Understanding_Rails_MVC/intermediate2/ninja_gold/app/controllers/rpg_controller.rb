class RpgController < ApplicationController
  def index
    if session[:gold] == nil
      session[:gold] = 0
    end
    if session[:activity] == nil
      session[:activity] = []
    end
  end

  def farm
    random = rand(10..20)
    session[:gold] = session[:gold] + random
    session[:activity].push("<p class='green'>Earned #{random} golds from the farm!</p>");
    redirect_to '/rpg/index'
  end

  def cave
    random = rand(5..10)
    session[:gold] = session[:gold] + random
    session[:activity].push("<p class='green'>Earned #{random} golds from the cave!</p>");
    redirect_to '/rpg/index'
  end

  def house
    random = rand(2..5)
    session[:gold] = session[:gold] + random
    session[:activity].push("<p class='green'>Earned #{random} golds from the house!</p>");
    redirect_to '/rpg/index'
  end

  def casino
    random = rand(-50..50)
    session[:gold] = session[:gold] + random
    if random >= 0
      session[:activity].push("<p class='green'>Won #{random} golds from the casino!</p>");
    else
      session[:activity].push("<p class='red'>Lost #{random} golds from the casino!</p>");
    end
    redirect_to '/rpg/index'
  end

  def reset 
    session[:gold] = nil
    session[:activity] = nil
    redirect_to '/rpg/index'
  end
end
