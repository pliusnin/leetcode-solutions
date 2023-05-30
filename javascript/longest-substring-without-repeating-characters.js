/**
 * @param {string} s
 * @return {number}
 */
const lengthOfLongestSubstring = function(s) {
  if (s === '') return 0;

  let buffer = s[0]; // as initial value, take the first char
  let longestValue = 1;

  for (let i = 1; i < s.length; i++) {
    const dupIndex = buffer.indexOf(s[i]); // looking for a duplicate
    buffer += s[i];

    if (dupIndex > -1) {
      // if duplicate char is found, slice it
      buffer = buffer.slice(dupIndex+1);
    } else {
      // check for the bigger value
      longestValue = buffer.length > longestValue ? buffer.length : longestValue;
    }
  }

  return longestValue;
};