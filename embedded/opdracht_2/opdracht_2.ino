#define LED 13
#define BUTTON 12

int button_state = HIGH;
int led_state = LOW;

void setup()
{
  pinMode(LED, OUTPUT);
  pinMode(BUTTON, INPUT);
  digitalWrite(BUTTON, HIGH);
}

void loop()
{
  if(digitalRead(BUTTON) == LOW && button_state == HIGH)
  {
    button_state = LOW;
    
    if(led_state == HIGH)
    {
      led_state = LOW;
    }

    else
    {
      led_state = HIGH;
    } 
  }

  if(digitalRead(BUTTON) == HIGH)
  {
    button_state = HIGH;
  }

  digitalWrite(LED, led_state);
}

