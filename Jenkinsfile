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

        stage('Build and Deploy') {
            steps {
                sh 'sudo chmod -R o+w /home/ubuntu'
                dir('/home/ubuntu/theti') {
                    sh 'docker-compose up --build -d'
                }
            }
        }
    }
}
