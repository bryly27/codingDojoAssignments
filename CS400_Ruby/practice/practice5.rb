x = "coding Dojo";

puts x.length;
puts x.capitalize;
puts x;
puts x.downcase;

if(x.include?("Dojo"))
	puts "Dojo is found";
else
	puts "nothing";
end

y = "Bryant, Michael, John, Bob";
puts y.split(",");

z = '';
if(z.empty?)
	puts "this is empty";
else
	puts 'z is something';
end