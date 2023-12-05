function reverseNumber(input) {
    return [].map.call(input, function(x) {
       return x;
     }).reverse().join(''); 
   }
   
   function plainNumber(number) {
      return number.split('.').join('');
   }
   
   function splitInDots(input) {
     
     var value = input.value,
         plain = plainNumber(value),
         reversed = reverseNumber(plain),
         reversedWithDots = reversed.match(/.{1,3}/g).join('.'),
         normal = reverseNumber(reversedWithDots);
     
     console.log(plain,reversed, reversedWithDots, normal);
     input.value = normal;
   }
   
   function oneDot(input) {
     var value = input.value,
         value = plainNumber(value);
     
     if (value.length > 3) {
       value = value.substring(0, value.length - 3) + '.' + value.substring(value.length - 3, value.length);
     }
     console.log(value);
     input.value = value;
   }


function formatNumber(input) {
  // Remove non-numeric characters
  let value = input.value.replace(/[^0-9]/g, '');
  
  // Add commas every three digits from the right
  value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
  
  // Update the input value
  input.value = value;
}