function secondLargesNumber(numbers) {
    let first = numbers[0]
    let second = 0;

    for(i=0; i< numbers.length; i++){
        if (numbers[i] > first) {
            second = first;
            first = numbers[i]
        }

        if (numbers[i] > second && numbers[i] < first){
            second = numbers[i];
        }
    }
    return second
}
let nums = [8,4,6,10,9,11]

//Nota de prueba

console.log(secondLargesNumber(nums))
