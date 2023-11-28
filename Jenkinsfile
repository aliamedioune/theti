pipeline {
agent any
stages {


stage('Get Repo') {
steps {
    sh 'sudo rm -r /var/jenkins_home/workspace/CICD/*'
    git branch: 'main', url: 'https://github.com/alexdoe99/theti.git'
    }
}

stage('old build down') {
steps {
    sh 'sudo chmod 777 -R /var/run/docker.sock'
    sh 'sudo chmod 777 -R /var/jenkins_home/workspace/CICD/'
    sh 'cd /var/jenkins_home/workspace/CICD/docker && docker compose down'
}
}




stage('Build UP') {
steps {

sh 'docker build -t theti .'
sh 'cd /var/jenkins_home/workspace/CICD/docker && docker compose up -d --build'
}
}
stage('Test') {
steps {
sh 'cd /var/jenkins_home/workspace/CICD && phpunit --log-junit result.xml UnitTestFiles/Test/'
}
}

}
}
