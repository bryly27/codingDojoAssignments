var arr =[4,3,2,5,6,1];


function quicksort(array){
	var pivot = array[0];
	var left=[];
	var right=[];

	if(array.length<2)
	{
		return array;
	}
	else
	{
		for(var i=1; i<array.length; i++)
		{
			if(array[i] <= pivot)
			{
				left.push(array[i]);
			}else{
				right.push(array[i]);
			}
		}
		return quicksort(left).concat(pivot).concat(quicksort(right));
	}

}

var sort = quicksort(arr);
console.log(sort)

