void setup() {

  // Begin.
  Serial.begin(9600);

  // Schrijf weg.
  Serial.write("Hello World.");

}

void loop() {

  if(Serial.available() > 0) 
  {
    char data = Serial.read();
    Serial.write(data);
  }
}
