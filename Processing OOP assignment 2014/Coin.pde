class Coin
{
 float radius = random(20,25);
 float h = 0;
 float spd = random(0.4, 2.0);
 float start = random(1,500);
 
 void setup()
 {
   strokeWeight( 10 );
   frameRate( 60 ); 
 }
 
 void draw()
 {
   radius = radius + sin( frameCount / 6 );
   fill(255,190,0);
   //stroke(255,200,0);
   h = h+(3*spd);
   ellipse(start, h, radius, radius);
   if(h > height+50)
    {
      h = 0;
      start = random(1,500);
      spd = random(0.4, 2.0); 
    }
    
    
    if(lives == 0)
    {
      h = 0;
      start = random(1,500);
      spd = random(0.4, 2.0);
      radius = random(20,25);
    }
    
    
    if(dist(start, h, player.X, player.Y) <= ((radius+player.radius)-50))
    {
         
     textSize(60);
     text("$$$", start, h, +30);
     fill(255);
   
      h = 0;
      start = random(1,500);
      spd = random(0.4, 2.0);
      point = true;
    }
    
 }

 
}
