
#!/usr/bin/env python
import pygame,sys,time,random
from pygame.locals import *
# 定义颜色变量
redColour = pygame.Color(255,0,0) # 红色
blackColour = pygame.Color(0,0,0) # 黑色
whiteColour = pygame.Color(255,255,255) # 白色
greyColour = pygame.Color(150,150,150) # 灰色

# 这四个颜色都是界面中需要用到的颜色

# 定义gameOver函数
def gameOver():
    pygame.display.set_caption('游戏结束')
    # 等待 3 秒
    time.sleep(2)
    # 退出游戏
    pygame.quit()
    # 系统 
    sys.exit()

# 定义main函数
def main():
    # 初始化pygame
    pygame.init()
    fpsClock = pygame.time.Clock()
    # 创建pygame显示层， 640 * 480 的一个窗口
    playSurface = pygame.display.set_mode((640,480))
    # 设置标题
    pygame.display.set_caption('贪吃蛇')

    # 初始化变量
    
    # 蛇初始的坐标
    snakePosition = [100,100]
    # 蛇身体的坐标
    snakeSegments = [[100,100],[80,100],[60,100]]
    # 食物初始化的坐标
    raspberryPosition = [300,300]
    # 是否有食物
    raspberrySpawned = 0

    # 初始蛇的方向，就是蛇一直向那个方向跑
    # left right up down
    direction = 'right'

    # 控制游戏的方向
    changeDirection = direction

    # 进入循环，防止游戏闪退
    while True:
        # 检测例如按键等pygame事件
        for event in pygame.event.get():
            # 如果发生了退出的事件则
            if event.type == QUIT:
                pygame.quit() # 退出游戏
                sys.exit() # 退出系统 

            # 如果发生了键盘事件
            elif event.type == KEYDOWN:
                # 判断键盘事件
                # 方向键右
                if event.key == K_RIGHT or event.key == ord('d'):
                    # 改变蛇的方向，在右边
                    changeDirection = 'right'
                # 方向键左
                if event.key == K_LEFT or event.key == ord('a'):
                    # 改变蛇的方向，在左边
                    changeDirection = 'left'
                if event.key == K_UP or event.key == ord('w'):
                    changeDirection = 'up'
                if event.key == K_DOWN or event.key == ord('s'):
                    changeDirection = 'down'
                # esc 键
                if event.key == K_ESCAPE:
                    # 退出游戏
                    pygame.event.post(pygame.event.Event(QUIT))

        # 判断是否输入了反方向
        # 也就是说当用户按了右键，就让蛇一直向右边跑，按了左键就一直向左跑
        if changeDirection == 'right' and not direction == 'left':
            # 将蛇跑的方向改变成按键方向 
            direction = changeDirection
        if changeDirection == 'left' and not direction == 'right':
            direction = changeDirection
        if changeDirection == 'up' and not direction == 'down':
            direction = changeDirection
        if changeDirection == 'down' and not direction == 'up':
            direction = changeDirection

        # 根据方向移动蛇头的坐标
        # 每循环一次判断蛇的方向，将蛇头向前方加 20 
        #  因这，整个坐标是以 20 为增量 
        if direction == 'right':
            snakePosition[0] += 20
        if direction == 'left':
            snakePosition[0] -= 20
        if direction == 'up':
            snakePosition[1] -= 20
        if direction == 'down':
            snakePosition[1] += 20

        # 增加蛇的长度
        snakeSegments.insert(0,list(snakePosition))

        # 判断是否吃掉了树莓
        if snakePosition[0] == raspberryPosition[0] and snakePosition[1] == raspberryPosition[1]:
            raspberrySpawned = 0
        # 如果没有
        else:
            # 则把最后一个坐标移除
            snakeSegments.pop()


        # 如果吃掉树莓，则重新生成树莓
        if raspberrySpawned == 0:
            # 产生两个随机数
            # 这两个随机数分别表示横与纵
            x = random.randrange(1,32)
            y = random.randrange(1,24)
            raspberryPosition = [int(x*20),int(y*20)]
            raspberrySpawned = 1

        # 游戏的背景，这里全是黑色背景，用的 黑色 变量
        playSurface.fill(blackColour)
        # 从每个坐标绘制蛇的位置和食物的位置
        for position in snakeSegments:
            pygame.draw.rect(playSurface,whiteColour,Rect(position[0],position[1],20,20))
            pygame.draw.rect(playSurface,redColour,Rect(raspberryPosition[0], raspberryPosition[1],20,20))


        pygame.display.set_caption(str(snakeSegments[0]) + str(snakeSegments[1]) ) 


        # 刷新pygame显示层
        pygame.display.flip()
        # 判断是否死亡
        # 因为游戏的界面最长 640 ，然后减去一个蛇头的长 20，所以要大于等于 620 就游戏结束
        if snakePosition[0] >= 620 or snakePosition[0] <= 0:
            gameOver()
            
        # 因为游戏的界面高 480 ，然后减去一个蛇头的长 20，所以要大于等于 460 就游戏结束
        if snakePosition[1] >= 460 or snakePosition[1] <= 0:
            gameOver()           
        # 控制游戏速度
        fpsClock.tick(5)

if __name__ == "__main__":
    main()