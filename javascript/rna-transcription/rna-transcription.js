/**
 *
 * @type {{A: string, C: string, T: string, G: string}}
 * @comment DNA to is transcribed RNA strand
 */
const nucleotides = {
    'G':'C',
    'C':'G',
    'T':'A',
    'A':'U'
}
/**
 *
 * @param strands
 */
export const toRna = strands =>
    strands.replace(/[GCTA]/g, letter => nucleotides[letter] );