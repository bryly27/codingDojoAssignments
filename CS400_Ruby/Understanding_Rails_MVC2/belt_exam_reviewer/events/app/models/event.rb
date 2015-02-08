class Event < ActiveRecord::Base
  belongs_to :user
  validates :name,		:presence   => true,
            :length               => { :maximum => 30 }
  validates :date,		:presence   => true
  validates :city,		:presence   => true
  validates :state,		:presence   => true
  
          
end
