# array = [3,5,1,2,7,9,8,13,25,32];
# sum = 0;

# for i in array

# 	sum = sum + i;

# end

# puts "The sum of the Array is #{sum}";

# new_array = array.reject{|x| x<10};
# puts new_array;

# names = ["John", "KB", "Oliver", "Cory", "Matthew", "Christopher"];
# for i in names.shuffle
# 	if i.length > 5
# 		puts i;
# 	end
# end

# alphabet = ("a".."z").to_a
# first_letter = alphabet.first

# # puts first_letter
# first_letter = alphabet.shuffle.first
# puts first_letter
# if first_letter == "a"
# 	puts "you found the letter a"
# elsif first_letter == "e"
# 	puts "you found the letter e"
# elsif first_letter == "i"
# 	puts "you found the letter i"
# elsif first_letter == "o"
# 	puts "you found the letter o"
# elsif first_letter == "u"
# 	puts "you found the letter u"
# end


# array = [];
# for i in 1..10
# 	array.push(rand(55..100))
# end

# puts array.sort
# puts "Minimum value is #{array.sort.first}"
# puts "Max value is #{array.sort.last}"

# random_string = '';

# for i in 1..5
# 	random_string.insert (65+rand(26)).chr
# end
# puts random_string;

# puts (1..5).collect{(65+rand(26)).chr}.join.to_s

for i in 1..10
	puts (1..5).collect{(65+rand(26)).chr}.join.to_s
end







