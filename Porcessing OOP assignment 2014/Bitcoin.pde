//C12474932 DT228-2 OOP Christmas assignment 
//This assignment is a coin catching game loosely based on BITCOIN
//and by loosely, I mean it has coins in it. That's about it.
//Music is Harry Enfield's Loadsamoney, released in 1988

import ddf.minim.*;
int NoCoins = 10;
int NoBombs = 4;
int i,j;
int score, highscore, lives;
ArrayList<Coin> Coins = new ArrayList<Coin>();
ArrayList<Bomb> Bombs = new ArrayList<Bomb>();
Player player = new Player();
boolean lose;
boolean point;
boolean gameover;
AudioPlayer audplayer, deathplayer;
Minim minim;//audio context

// Setup the Processing Canvas
void setup()
{
  gameover = false;
  lives = 3;
  score = 0;
  size( 500, 500 );
  for(i = 0; i < NoCoins; i++)
  {
    Coins.add(new Coin());
  }
  for(j = 0; j < NoBombs; j++)
  {
    Bombs.add(new Bomb());
  }
  minim = new Minim(this);
  audplayer = minim.loadFile("Loadsamoney.mp3", 2048);
  deathplayer = minim.loadFile("howie scream.mp3", 2048);
  audplayer.play();
}

// Main draw loop. This draws all the shapes
void draw()
{
  if(lives > 0)
  {
    if(lose)
    {
      score = 0;
      lives = lives - 1;
      lose = false;
    }
    if(point)
    {
      score = score+1;
      point = false;
    }
    if(score>highscore)
    {
      highscore = score;
    }
    player.draw();
    for(i = 0; i < NoCoins; i++)
    {
      Coins.get(i).draw();
    }
    for(j = 0; j < NoBombs; j++)
    {
      Bombs.get(j).draw();
    }
    textSize(32);
    text("Losely based on BITCOIN", 100, 30, +30);
    textSize(16);
    text("Score: "+score, 175, 60, +30);
    text("Highscore: "+highscore, 175, 75, +30);
    text("Lives: "+lives, 175, 90, +30);
     
    fill(255,255,0);
  }
  if(lives == 0)
  {
    background(255, 150, 0);
    textSize(55);
    text("--------\nYOU DIED\n--------", 125, 225, +30);
    textSize(32);
    text("click to start again", 125, 350, +30);
    fill(255,0,0);
    
    if(mousePressed == true)
    {
      background(255);
      lives = 3;
    }
  }

}


// Set circle's next destination using the mouse
void mouseMoved()
{
  player.mouseMoved();
}

