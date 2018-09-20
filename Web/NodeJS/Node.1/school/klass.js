
var student = require('./student');
var teacher = require('./teacher');

// klass 模块的 add() 方法
function add(teacherName, studentName ) {
	teacher.add(teacherName);
	studentName.forEach(function(item, index){
		student.add(item);
	});
}

exports.add = add;
// module.exports = add;


