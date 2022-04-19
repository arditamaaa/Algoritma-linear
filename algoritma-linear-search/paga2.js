const kata = ['aku','kamu','dia','mereka','kalian','semua','saya'];
const input = 'semua';

let index = -1;

/*
 * @param {Array} arr [list array]
 * @param {Number} N [jumlah item didalam list]
 * @param {Number} x [nilai yang di cari]
 On
 */
function linearSearch (arr, n, x) {
  for (let i = 0; i < n; i++) {
    if (arr[i] == x ) {
      return i;
    }
  }
  return -1;
}

console.log(linearSearch(kata, 7, 'mereka'));