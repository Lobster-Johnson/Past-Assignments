class Bomb
{
 float radius = random(15,20);
 float h = 0;
 float spd = random(0.2, 1.2);
 float start = random(1,500);
 
 void setup()
 {
   strokeWeight( 10 );
   frameRate( 60 ); 
 }
 
 void draw()
 {
   radius = radius + sin( frameCount / 6 );
   fill(0);
   stroke(255,200,0);
   h = h+(3*spd); 
   ellipse(start, h, radius, radius);
   if(h > height)
    {
      spd = 2.5;
      fill(255,0,0);
      ellipse(start, 500, 50, 50);
    }
   if(h > height+50)
    {
      h = 0;
      start = random(1,500);
      spd = random(0.2, 1.2);
    }
    if(lose)
    {
      h = 0;
      start = random(1,500);
      spd = random(0.2, 1.2);
    }
    
    if(lives == 0)
    {
      h = 0;
      start = random(1,500);
      spd = random(0.2, 1.2);
      radius = random(15,20);
    }
    
    if(dist(start, h, player.newX, player.newY) <= ((radius+player.radius)-50))
    {
      fill(255,0,0);
      ellipse(start, h, 150, 150);
      h = 0;
      start = random(1,500);
      spd = random(0.2, 1.2);
      lose = true;
    }
    
 }
 
 void update()
 {
     h = h+7;
 }
 
}
