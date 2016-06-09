var mongoose = require('mongoose');

mongoose.connect('mongodb://localhost/todoApp');

var TodoSchema = new mongoose.Schema({
  name: String,
  completed: Boolean,
  note: String,
  updated_at: { type: Date, default: Date.now },
});

var Todo = mongoose.model('Todo', TodoSchema);

var todo = new Todo({name: 'Master NodeJS', completed: false, note: 'Getting there...'});

todo.save(function(err){
    if(err)
        console.log(err);
    else
        console.log(todo);
});

// Find All
Todo.find(function (err, todos) {
  if (err) return console.error(err);
  console.log(todos)
});

var callback = function (err, data) {
  if (err) return console.error(err);
  else console.log(data);
}

// Get all completed tasks
Todo.find({completed: true }, callback);

// Get all tasks ending with `JS`
Todo.find({name: /JS$/ }, callback);

var oneYearAgo = new Date();
oneYearAgo.setYear(oneYearAgo.getFullYear() - 1);

// Get all tasks staring with `Master`, completed
Todo.find({name: /^Master/, completed: true }, callback);

// Get all tasks staring with `Master`, not completed and created from year ago to now...
Todo.find({name: /^Master/, completed: false }).where('updated_at').gt(oneYearAgo).exec(callback);



// Update
// Model.update(conditions, update, [options], [callback])
// update `multi`ple tasks from complete false to true

Todo.update({ completed: false }, { completed: true }, { multi: true }, function (err, numberAffected, raw) {
  if (err) return handleError(err);
  console.log('The number of updated documents was %d', numberAffected);
  console.log('The raw response from Mongo was ', raw);
});

//Model.findOneAndUpdate([conditions], [update], [options], [callback])
Todo.findOneAndUpdate({name: /JS$/ }, {completed: false}, callback);

// Middleware
app.get('/todos/:id', function (req, res, next) {
  Todo.findById(req.params.id, function(err, todo){
    if(err) res.send(err);
    res.json(todo);
  });
});