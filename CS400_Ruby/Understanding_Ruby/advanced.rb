# class MathDojo

# 	def initialize
# 		@result = 0
# 	end

# 	def add *num
# 		@sum = 0
# 		for i in num
# 			@sum = @sum + i
# 		end
# 		@result = @result + @sum
# 		return self
# 	end

# 	def subtract *num
# 		@sum = 0
# 		for i in num
# 			@sum = @sum + i
# 		end
# 		@result = @result - @sum
# 		return self
# 	end

# 	def result 
# 		return @result
# 	end

# end

# puts MathDojo.new.add(2).add(2,5).subtract(3,2).result



class MathDojo

	def initialize
		@result = 0
	end

	def add *num
		@sum = 0
			for i in num
				if i.kind_of?(Array)
					for k in i
						@sum = @sum + k
					end
				else
					@sum = @sum + i
				end
			end
			@result = @result + @sum
		return self
	end

	def subtract *num
		@sum = 0
		for i in num
			if i.kind_of?(Array)
				for k in i
					@sum = @sum + k
				end
			else
				@sum = @sum + i
			end
		end
		@result = @result - @sum
		return self
	end

	def result 
		return @result
	end

end

puts MathDojo.new.add(1).add([3,5,7,8], [2,4.3,1.25]).subtract([2,3], 1.1, 2.3).result
# puts MathDojo.new.add([3,5,7,8]).result





