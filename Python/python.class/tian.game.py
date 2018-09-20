import random

def drawBroad(broad):
    print('-----------')
    print(' ' + broad[7] + ' | ' + broad[8] + ' | ' + broad[9])
    print('-----------')
    print(' ' + broad[4] + ' | ' + broad[5] + ' | ' + broad[6])
    print('-----------')
    print(' ' + broad[1] + ' | ' + broad[2] + ' | ' + broad[3])
    print('-----------')



def chooseLetter():
    print('before the game ,please choose the letter "X" or "O"("X will be first"): ')
    # 从用户获得一个字母  x 或 o
    letter = input().strip().upper()[0]
    print("you choose :" + letter)
    # 判断用户的选了那个
    if (letter == 'X'):
        return 'X'
    elif (letter == 'O'):
        return 'O'
    # 如果都不是则让用户重新选择
    else:
        chooseLetter()

# 判断胜负，列出了可以赢的八种可能
def checkWin(broad, letter):

    if (
    		# 判断三排
    		(broad[1] == letter and broad[2] == letter and broad[3] == letter)
        or (broad[4] == letter and broad[5] == letter and broad[6] == letter)
        or (broad[7] == letter and broad[8] == letter and broad[9] == letter)
        	# 判断三列
        or (broad[1] == letter and broad[4] == letter and broad[7] == letter)
        or (broad[2] == letter and broad[5] == letter and broad[8] == letter)
        or (broad[3] == letter and broad[6] == letter and broad[9] == letter)
        	# 判断斜起的两条线
        or (broad[7] == letter and broad[5] == letter and broad[3] == letter)
        or (broad[1] == letter and broad[5] == letter and broad[9] == letter)
        ):
	    # 如果满足就返回这个字母
        return letter
    else:
        return 'N'


# 判断画布上 location 这个地方，是否有字母
def hasLetter(broad, location):
    return broad[location] != ' '


# 返回坐标列表
# 这个列表是用来表示那个坐标上没有字母的
# 列表中的每一个元素就表示一个坐标
def FreeList(broad):
	# 准备一个待返回的列表
    freeList = []
    # 把 1 - 9 生成到列表中
    for i in range(1, 10):
    	# 判断画布 broad 上面 i 位置是否有字母
        if (not hasLetter(broad, i)):
        	# 如果没有则把没有字母的坐标添加到列表中
            freeList.append(i)
    # 将返回这个列表
    return freeList


# 用户回合
# 如果返回 None 则表示流程正常
# 如果返回用户棋子，则用户胜利
def PlayerMove(broad, letter):
    # 判断整个画布上是否为空
    if (FreeList(broad) == []):
        print("tie !!!")
        return 'T'
    # 得到用户输入的坐标
    playlocation = int(input("your turn:").strip()[0])
    print("***in PlayerMove() ***")

    # 判断用户输入的坐标上是否已经存在有 棋子

    # 也就是用户输入的坐标是否在 返回的坐标列表中
    # 如果用户输入的坐标中没棋子则
    if (playlocation in FreeList(broad)):
        # 在画布的该位置添加字母 letter
        broad[playlocation] = letter
        # 重新绘制一个画布
        drawBroad(broad)
        # 并判断是否有玩家胜利
        if (checkWin(broad, letter) != 'N'):
            print("you win")
            return letter
    # 如果已经有棋子，则重新输入，直到输入正确
    else:
        PlayerMove(broad, letter)

# 得到下一个该那个玩家棋子
def NextPlay(letter):
    if (letter == 'X'):
        return 'O'
    else:
        return 'X'

# 电脑的回合
# 如果返回 None 则表示流程正常执行
# 如果返回中 电脑棋子，则表示电脑赢
def ComputerMove(broad, computerLetter):

    # 同样先判断整个画布是否为空
    if (FreeList(broad) == []):
        print("tie !!!")
        return 'T'
    print("***in ComputerMove() ***")

    # 判断是用户还是电脑胜利
    # 如果 返回 0 则表示电脑胜利
    if (WillWin(broad, computerLetter) != 0):
        broad[WillWin(broad, computerLetter)] = computerLetter
        print("computer win")
        return computerLetter
    # 如果不等于
    #   则从下一个玩家那里判断是否该他赢，如果还是不是
    elif (WillWin(broad, NextPlay(computerLetter) != 0)):
        broad[WillWin(broad, NextPlay(computerLetter))] = computerLetter
    # 就在没有棋子的坐标中随机一个坐标，将它的值等于电脑的棋子
    else:
        broad[random.choice(FreeList(broad))] = computerLetter
    # 重绘画布
    drawBroad(broad)
    # 返回 None

# 判断谁将要赢
def WillWin(board, Letter):
    # 准备一个新的画布字典
    boardTemp = {}
    # 从 1 循环到 9 
    #   也就是每个坐标
    for i in range(1, 10):
        # 将字典中没有每个坐标位置的值等于原来画布坐标上的值
        # 这个值是 X 还是 O
        boardTemp[i] = board[i]

    # 从没有棋子的坐标中循环
    for i in FreeList(board):
        # 在复制的画布中
        # 每个坐标的值都与 letter 比较 
        boardTemp[i] = Letter
        # 如果两个值不相等
        if (checkWin(boardTemp, Letter) != 'N'):
            # 则直接返回该坐标
            return i
        # 否则将这个复制的画布的该坐标清空
        else:
            boardTemp[i] = " "
    # 最后都没有判断到谁赢，则返回 0 
    return 0

# 初始化游戏
#   就相当于初始化一个画布
def GameInit():
    # 准备一个坐标字典
    broad = {}
    for i in range(1, 10):
        # 将每个坐标的位置都置空
        broad[i] = ' '
    # 绘置画布
    drawBroad(broad)
    # 返回坐标字典
    return broad

# 游戏的入口，相当于 main 函数
def GameBody(board, letter):
    # 准备一个空串，用来得到那个玩家的棋子
    rs = ''
    # 循环
    while (True):
        # 如果是电脑回合
        rs = ComputerMove(board, letter)
        # 在电脑的回合中，如果有返回值，也就是电脑赢
        if (rs is not None):
            break # 跳出循环

        # 如果没有返回值，得到下一个回合的玩家的棋子
        letter = NextPlay(letter)
        # 同样，如果是用户回合
        rs = PlayerMove(board, letter)
        # 在用户回合中，如果有返回值，也就是用户赢了
        if (rs is not None):
            break # 跳出循环

        # 以上在每一次循环中都不满足
        # 得到下一个用户的棋子
        letter = NextPlay(letter)
    # 最后返回玩家的棋子
    return rs


def GameStart():
    # 得到游戏画布
    broad = GameInit()
    # 得到玩家选择的棋子
    playerletter = chooseLetter()
    # 如果玩家的棋子是 X 
    if (playerletter == 'X'):
        # 则是玩家回合
        PlayerMove(broad, playerletter)
    # 游戏开始
    rs = GameBody(broad, NextPlay(playerletter))
    print("rs:" + rs)

# 开始游戏
GameStart()

