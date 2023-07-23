// C++ code
//

#include<Servo.h>
Servo s1;

void setup()
{
  s1.attach(9);
}

void loop()
{
  
  for (int i=0; i<180; i+=1){
  	s1.write(i);
    delay(30);
  }
  
  for (int i=0; i>=0; i-=1){
  	s1.write(i);
    delay(30);
  }
  
  /*s1.write(0);
  delay(2000);
  s1.write(10);
  delay(2000);
  s1.write(20);
  delay(2000);
  s1.write(40);
  delay(2000);
  s1.write(80);
  delay(2000);
  s1.write(90);
  delay(2000);
  s1.write(140);
  delay(2000);
  s1.write(180);
  delay(2000);
  s1.write(0);*/
}