class User < ActiveRecord::Base

	EMAIL_REGEX = /\A([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]+)\z/i
	validates :first_name, :last_name, :email_address, :age, presence:true 
	validates :first_name, :last_name, length: {in: 2..50}
	# validates :age, numericality: {only_integer: true}
	validates_numericality_of :age, :only_integer => true, :greater_than_or_equal_to => 10, :less_than_or_equal_to => 150
end
