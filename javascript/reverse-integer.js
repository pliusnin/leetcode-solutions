/**
 * @param {number} x
 * @return {number}
 */
const reverse = function(x) {
  let result = '';
  // get a sign of the given number
  const sign = Math.sign(x);
  // make sure it's positive
  x = sign * x;

  // get value remaining from division and push to result variable
  while (x != 0) {
    result += x % 10;
    x = Math.floor(x/10);
  }

  // if result's value is over type limit return 0 then
  if (result > 0x7FFFFFFF) {
    return 0;
  }

  // get back correct sign
  result = sign * result;

  return result
};