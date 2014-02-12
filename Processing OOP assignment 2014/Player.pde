class Player
{
  float radius = 50.0;
  float Speed;
  int X, Y;
  int newX, newY;
  int delay = 16;
  boolean shrink;
  
  void setup()
  {
    strokeWeight( 10 );
    frameRate( 60 );
    X = 250;
    Y = 500;
    newX = X;
    newY = Y;
    Speed = 3;
  }
  
  void draw()
  {
    radius = 75;
    radius = radius + sin( frameCount / 6 );
    
    if(mousePressed == true)
    {
      radius = 25;
    }
  
    // Track circle to new destination
    X+=(newX-X)/delay;
    Y+=(newY-Y)/delay;
    
    // Fill canvas grey
    background(255);
    // Set fill-color 
    fill(255,255,0);
    // Set stroke-color
    //stroke(255,200,0); 
    // Draw circle
    ellipse( X, Y, radius, radius );
  }
  
  // Set circle's next destination using the mouse
  void mouseMoved()
 {
   newX = mouseX;
   newY = mouseY;
  
 }
 
 void mouseClicked()
 {
   shrink = true;
   if(shrink)
    {
      radius = 25;
    }
 }
 
 void mouseDragged()
 {
   newX = mouseX;
   newY = mouseY;
   shrink = true;
   
 }
}
