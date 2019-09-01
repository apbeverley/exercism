/* 
    A gigasecond is 10^9 but this function is are using javasript time which is 
    formatted in miliseconds so we need to use 10^12    
*/
const gigaSecondInMilliseconds = 1000000000000;

export const gigasecond = (dt) => new Date(Math.floor(dt.getTime() + gigaSecondInMilliseconds));