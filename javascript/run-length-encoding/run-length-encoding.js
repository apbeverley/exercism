/**
 *
 * @param strands
 */
const encode = myValue => [...myValue].reduce((accumulator,
                                                currentValue,
                                                currentIndex,
                                                array) => {
counter = 1;
  if (currentValue === array[currentIndex + 1]) {
    //increment and move on
    counter++;
    return accumulator;
  } else {
    //save letter and number
    accumulator += (currentValue + counter);
    counter = 1;
    return accumulator;
  }

}, '');

const decode = () => {
  throw new Error("Remove this statement and implement this function");
};


console.log(encode('AABBBCCCC'));
console.log(encode('ABC'));