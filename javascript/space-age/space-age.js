/**
 *
 * @type {{saturn: string, venus: string, uranus: string, mercury: string, mars: string, neptune: string, jupiter: string}}
 * @description - the time it takes for each of these planet to fulfil an earth year
 */
const planetsOrbitalAdjustment = {
    'mercury': '0.2408467',
    'venus': '0.61519726',
    'earth': '1',
    'mars': '1.8808158',
    'jupiter': '11.862615',
    'saturn': '29.447498',
    'uranus': '84.016846',
    'neptune': '164.79132'
}

/**
 *
 * @type {number}
 * @description number of seconds in an earth year
 */
const secondsOnEarth = 31557600;

/**
 *
 * @param planet
 * @param age
 * @returns {number}
 */
export const age = (planet, age) => Number((age / (planetsOrbitalAdjustment[planet] * secondsOnEarth)).toFixed(2));