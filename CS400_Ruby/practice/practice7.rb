x = (1..5);

puts "Class Name: #{x.class}"
puts x.min.to_s;
puts x.max.to_s;
puts x.last;
puts x.first;

y = ("a".."z");
i = ('a'..'z');
puts i.to_a.to_s;
puts y.to_a.shuffle.to_s