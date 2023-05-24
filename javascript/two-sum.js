/**
 * Using methods some and findIndex to have less iterates.
 *
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
const twoSum = function(nums, target) {
  let answer = [];

  nums.some((item, i) => {
    const second = target - item;
    // look for the number equal to variable `second`. Use only after i elements.
    const i2 = nums.findIndex((el, ind) => {
      return ind > i && el == second;
    });

    if (i2 == -1) return false;
    answer = [i, i2];
    return true;
  });

  return answer;
};

/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
const twoSum2 = function(nums, target) {
  let answer = [];

  nums.some((item, i) => {
    return nums.some((item2, i2) => {
      if (i2 <= i) return false;
      if (item + item2 === target) {
        answer = [i, i2];
        return true;
      }

      return false;
    })
  });

  return answer;
};
