//import { value } from './resistor-color-duo.js';

import { value } from './resistor-color-duo.js';  // this is our myfile.mjs

describe('Resistor Colors', () => {
  test('Brown and black', () => {
    expect(value(['brown', 'black'])).toEqual(10);
  });

  test('Blue and grey', () => {
    expect(value(['blue', 'grey'])).toEqual(68);
  });

  test('Yellow and violet', () => {
    expect(value(['yellow', 'violet'])).toEqual(47);
  });

  test('Orange and orange', () => {
    expect(value(['orange', 'orange'])).toEqual(33);
  });
});
