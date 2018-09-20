import pygame,sys,random
from pygame.locals import *
import random
import time



class SnakeHead(pygame.sprite.Sprite):

    def __init__(self, image, snake_tail):
        pygame.sprite.Sprite.__init__(self)
        self.image = image
        self.rect = self.image.get_rect()
        self.rect.x = snake_size_x
        self.rect.y = snake_size_y
        self.x_speed = self.rect.width
        self.y_speed = self.rect.height
        self.snake_move= 'right'


    def move(self):
        self.last_x, self.last_y = self.rect.x, self.rect.y#蛇身的运动
        if self.snake_move == 'up':
            self.rect.y -= self.y_speed
        if self.snake_move == 'down':
            self.rect.y += self.y_speed
        if self.snake_move == 'left':
            self.rect.x -= self.x_speed
        if self.snake_move == 'right':
            self.rect.x += self.x_speed


        # 当蛇到了边界游戏结束
        if self.rect.x > game_width or self.rect.x< 0:
            game_over(game)
        if self.rect.y  >game_height or self.rect.y<0:
            game_over(game)

        # pygame.display.set_caption(str(self.rect.x)+' '+str(self.rect.y)+' '+str(self.x_speed)+' '+str(self.y_speed))
        
        self.check_if_eating()
        self.check_if_dead()

        if len(snake_tail) > 0:
            snake_tail.pop()
            snake_tail.insert(0, SnakeBody(body_image, self.last_x, self.last_y))
            global snake_group
            snake_group = pygame.sprite.Group(self, *snake_tail)

    def add_block(self):
        global snake_group
        snake_tail.append(SnakeBody(body_image, self.last_x, self.last_y))
        snake_group = pygame.sprite.Group(self, *snake_tail)

    def check_if_eating(self):
        for apple in pygame.sprite.spritecollide(self, apple_group, False):
            apple.reset()
            self.add_block()

    def check_if_dead(self):
        for sprite in snake_group:
            if len(pygame.sprite.spritecollide(sprite, snake_group, False)) > 1:
                global game_ended
                game_ended = True

class SnakeBody(pygame.sprite.Sprite):

    def __init__(self, image, x, y):
        pygame.sprite.Sprite.__init__(self)
        self.image = image
        self.rect = self.image.get_rect()
        self.rect.x = x
        self.rect.y = y
class Apple(pygame.sprite.Sprite):

    def __init__(self, image, x=None, y=None):
        pygame.sprite.Sprite.__init__(self)
        self.image = image
        self.rect = self.image.get_rect()

        if x == None:
            self.rect.x = random.randint(0,game_width - self.rect.width)
        else:
            self.rect.x = x

        if y == None:
            self.rect.y = random.randint(0,game_height - self.rect.height)
        else:
            self.rect.y = y

    def reset(self):
        self.rect.x = random.choice(range(0,game_width - self.rect.width, self.rect.width))
        self.rect.y = random.choice(range(0,game_height - self.rect.height, self.rect.height))


pygame.init()
game_name="贪吃蛇"
pygame.display.set_caption(game_name)
game_width,game_height=1080,720
game = pygame.display.set_mode((game_width,game_height))
fps = 5
game_go =False
clock = pygame.time.Clock()
background_color = (150, 150, 150)
snake_size_x=100
snake_size_y=200
ttf_color=0,0,0

# pygame.mixer.init()
# pygame.mixer.music.load('./music/12.mp3')
# pygame.mixer.music.play(1)

body_image = pygame.image.load('./images/snake_block.png')
head_image = pygame.image.load('./images/snake_head.png')
food_image = pygame.image.load('./images/apple.png')
background_image = pygame.image.load('./images/background.png')
vignette_image = pygame.image.load('./images/vignette.png')
vignette_image = pygame.transform.scale(
    vignette_image,
    (game_width, game_height)
)


# 蛇的身体
snake_tail = []
# 初始化蛇身长
lens = 3
x,y = snake_size_x , snake_size_y
while lens:
    x -= 20
    snake_tail.append(SnakeBody(body_image, x, y))
    lens -= 1

snake = SnakeHead(head_image, snake_tail)

snake_group = pygame.sprite.Group(snake, *snake_tail)

apple_list = [Apple(food_image) for _ in range(0, 1)]

apple_group = pygame.sprite.Group(*apple_list)

def draw_background(game):
    for x in range(0, game_width, background_image.get_rect().width):
        for y in range(0,game_height, background_image.get_rect().height):
            pygame.Surface.blit(game, background_image, (x, y))


def game_over(game):
    # gameoverFont = pygame.font.Font('ziti.ttf', 72)
    # gameoverSurf = gameoverFont.render('Game Over', True,ttf_color )
    # gameoverRect = gameoverSurf.get_rect()
    # gameoverRect.midtop = (500, 300)
    # game.blit(gameoverSurf, gameoverRect)
    # pygame.display.flip()
    pygame.display.set_caption('game over')
    time.sleep(1)
    pygame.quit()
    sys.exit()


while not game_go:
    for event in pygame.event.get():
        if event.type == QUIT:
            game_go = True
            break
        if event.type == KEYDOWN:
            if event.key == K_ESCAPE:
                game_go  = True
                break
            if snake.snake_move in  ['right','left']:
                if event.key == K_UP:
                    snake.snake_move= 'up'
                if event.key == K_DOWN:
                    snake.snake_move = 'down'
            if snake.snake_move in ['up', 'down']:
                if event.key == K_LEFT:
                    snake.snake_move = 'left'
                if event.key == K_RIGHT:
                    snake.snake_move = 'right'
            if event.key ==K_i:
                fps=fps+1
            if event.key ==K_o:
                fps=fps-1
    snake.move()

    pygame.Surface.fill(game, background_color)
    draw_background(game)
    apple_group.draw(game)
    snake_group.draw(game)
    pygame.Surface.blit(game, vignette_image, (0, 0))
    pygame.display.update()
    clock.tick(fps)

