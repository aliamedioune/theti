pipeline {
    agent any

    stages {
        stage('Pull latest changes') {
            steps {
                dir('/home/ubuntu/theti') {
                    git branch: 'master', url: 'https://github.com/alexdoe99/theti.git'
                }
            }
        }
    }
}
