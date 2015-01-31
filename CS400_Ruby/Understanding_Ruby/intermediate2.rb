class Student
	attr_accessor :name, :location, :belt
	def initialize name, location, belt
		@name = "Bryant"
		@location = location
		@belt = belt
	end
	# def name
	# 	return @name
	# end
	# def name=(name)
	# 	@name = name
	# end
	
end

Bryant = Student.new("Bryant", "SJ", "Belt")
puts Bryant.name
puts Bryant.location
puts Bryant.belt
