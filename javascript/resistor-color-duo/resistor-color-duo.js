/* jshint esversion: 6 */

const COLORS = ["black","brown","red","orange","yellow","green","blue","violet","grey","white"];

const colorCode = color => COLORS.indexOf(color);

export const value = colors => Number(colors.map(colorCode).join(''));