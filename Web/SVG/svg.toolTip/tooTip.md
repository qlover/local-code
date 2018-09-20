
## less

### 编译 less 文件成 css 文件
	$ lessc [input less file] [ouput css file ]

### 编译 map 文件,同步 chrome
	$ lessc --source-map [less file] [css file]

### 监听 `lessc` 命令，修改同步 css 文件
	$ wr --exec "lessc duang.less duang.css" duang.less

### 监听 `lessc` 命令，chrome 修改同步 css 文件
	$ wr --exec "lessc --source-map duang.less duang.css" duang.less


### chrome setting 
	auto-reload generate CSS  开启自动更新 css 