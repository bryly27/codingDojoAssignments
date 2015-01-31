a = {:first_name => "Michael", :last_name => "Choi"}
b = {:first_name => "Jon", :last_name => "Supsupin"}
c = {:first_name => "KB", :last_name => "Tonel"}
d = {:first_name => "Mikee", :last_name => "Buyco"}
e = {:first_name => "Diana", :last_name => "Manlulu"}
names = [a, b, c, d, e];

puts "You got #{names.length} names in the 'names' array"
for i in names
	puts "The name is '#{i[:first_name]} #{i[:last_name]}'"
end