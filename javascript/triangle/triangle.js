//
// This is only a SKELETON file for the 'Triangle' exercise. It's been provided as a
// convenience to get you started writing code faster.
//

export class Triangle {
  constructor(...args) {
    this.dimensions = [...arguments];
  }

  kind() {
    let equalSides = 0;

    if((this.dimensions[0] <= 0) || (this.dimensions[1] <= 0) || (this.dimensions[2] <= 0))
      throw new Error('Invalid numbers!');
      
    if(this.dimensions[2] < (parseInt(this.dimensions[0]) + parseInt(this.dimensions[1])))
      throw new Error('Invalid inequality!');

    if(this.dimensions[0] == this.dimensions[1])
      equalSides++;

    if(this.dimensions[0] == this.dimensions[2])
      equalSides++;
    
    if(this.dimensions[1] == this.dimensions[2])
      equalSides++;

    if(equalSides == 0){
      return 'scalene';
    } else if(equalSides == 1){
      return 'isosceles';
    } else {
      return 'equilateral';
    }
  }
}