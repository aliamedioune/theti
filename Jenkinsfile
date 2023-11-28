pipeline {
    agent any

    stages {
        stage('Prepare') {
            steps {
                // Create the directory and initialize a Git repository
                dir('/home/ubuntu/theti') {
                    sh 'git init'
                    git url: 'https://github.com/alexdoe99/theti.git'
                }
            }
        }

        stage('Build and Deploy') {
            steps {
                // Run docker-compose up --build -d
                sh 'cd /home/ubuntu/theti && docker-compose up --build -d'
            }
        }
    }
}
