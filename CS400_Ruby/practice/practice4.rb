i = 0;
num = 5;
while i < num do
	puts "inside the loop i = #{i}"
	i +=1;
end

i=0;
num = 5;
begin
	puts "inside the loop i = #{i}"
	i +=1;
end while i<num;

for i in 0..5 
	puts "value of local variables is #{i}";
end