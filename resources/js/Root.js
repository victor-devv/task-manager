import React from "react";
import { User } from "./components/User";
import { Task } from './components/Task';

const totalNumberOfUsers = 25;

// Random user id
const userId = Math.floor(Math.random() * Math.floor(totalNumberOfUsers));

class App extends React.Component {

  constructor() {

    super();

    // currentTask keeps track of the product currently displayed
    this.state = {
      tasks: []
    }
  }

  componentDidMount() {
    fetch(`/api/tasks`)
      .then(response => {
        return response.json();
      })
      .then(tasks => {
        this.setState({tasks});
      });
  }

  handleClick(task) {
    this.setState({currentTask: task});
  }

  renderTasks() {
    return this.state.tasks.map(task => {
      return (
        <li onClick={() => this.handleClick(task)}
            key={task.id}
            className={task.status ? "task strikethrough" : "task"}>
          {task.title}
        </li>
      );
    })
  }

  render() {
    return (
      <div id="app" className="container p-5">
        <div className="row">
          <div className="col-4">
            <h3> All tasks </h3>
            <ul>
              {this.renderTasks()}
            </ul>
          </div>

          <div className="col-8">
            <Task task={this.state.currentTask ?? ''}/>
          </div>
        </div>
      </div>
    );
  }
}


export default App;
