# first_number = 10;
# second_number = 5;

# operation = (1..4).to_a.sample
# if operation == 1
# 	answer = first_number + second_number;
# 	puts first_number + second_number;
# elsif operation == 2
# 	answer = first_number - second_number;
# 	puts first_number - second_number;
# elsif operation == 3
# 	answer = first_number * second_number;
# 	puts first_number * second_number;
# else 
# 	answer = first_number/second_number;
# 	puts first_number / second_number;
# end


puts "Enter the first number";
a = gets.chomp;
puts "Enter the second number";
b = gets.chomp;
puts "The sum is ", a.to_i + b.to_i
